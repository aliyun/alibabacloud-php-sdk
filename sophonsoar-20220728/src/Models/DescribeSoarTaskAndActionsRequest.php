<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarTaskAndActionsRequest extends Model
{
    /**
     * @description The language of the content within the request and response.
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
     * @description The playbook UUID.
     *
     * @example 1077f2f9-25e8-42d9-bfdf-1528e1313f6d
     *
     * @var string
     */
    public $requestUuid;
    protected $_name = [
        'lang'        => 'Lang',
        'requestUuid' => 'RequestUuid',
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
        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarTaskAndActionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }

        return $model;
    }
}
