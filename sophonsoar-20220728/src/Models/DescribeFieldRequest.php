<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeFieldRequest extends Model
{
    /**
     * @description The language of the content within the request and response. Valid values:
     *
     *   **zh**: Chinese (default)
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The key of the global configuration. Valid values:
     *
     *   **soar_filed_tags**: queries the input template of the playbook.
     *
     * This parameter is required.
     * @example soar_filed_tags
     *
     * @var string
     */
    public $queryKey;
    protected $_name = [
        'lang'     => 'Lang',
        'queryKey' => 'QueryKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->queryKey) {
            $res['QueryKey'] = $this->queryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFieldRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['QueryKey'])) {
            $model->queryKey = $map['QueryKey'];
        }

        return $model;
    }
}
