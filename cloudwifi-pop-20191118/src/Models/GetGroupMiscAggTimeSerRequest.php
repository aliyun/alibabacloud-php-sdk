<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudwifipop\V20191118\Models;

use AlibabaCloud\Dara\Model;

class GetGroupMiscAggTimeSerRequest extends Model
{
    /**
     * @var string
     */
    public $apgroupUuid;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $end;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'apgroupUuid' => 'ApgroupUuid',
        'appCode' => 'AppCode',
        'appName' => 'AppName',
        'end' => 'End',
        'start' => 'Start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apgroupUuid) {
            $res['ApgroupUuid'] = $this->apgroupUuid;
        }

        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->end) {
            $res['End'] = $this->end;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['ApgroupUuid'])) {
            $model->apgroupUuid = $map['ApgroupUuid'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['End'])) {
            $model->end = $map['End'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
