<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Dara\Model;

class DescribeDistinctReleasesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $playbookUuid;

    /**
     * @var string
     */
    public $taskflowMd5;
    protected $_name = [
        'lang' => 'Lang',
        'playbookUuid' => 'PlaybookUuid',
        'taskflowMd5' => 'TaskflowMd5',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
