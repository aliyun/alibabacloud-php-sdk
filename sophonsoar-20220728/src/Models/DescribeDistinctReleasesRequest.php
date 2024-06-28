<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeDistinctReleasesRequest extends Model
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
     * @description The playbook UUID.
     *
     * This parameter is required.
     * @example bc0b8424-535c-4ed5-bd94-xxxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The MD5 value of the playbook XML configuration.
     *
     * @example be0a4ef084dd174abe47xxxxx
     *
     * @var string
     */
    public $taskflowMd5;
    protected $_name = [
        'lang'         => 'Lang',
        'playbookUuid' => 'PlaybookUuid',
        'taskflowMd5'  => 'TaskflowMd5',
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
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDistinctReleasesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }

        return $model;
    }
}
