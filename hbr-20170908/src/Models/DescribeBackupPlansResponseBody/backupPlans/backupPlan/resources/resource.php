<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan\resources;

use AlibabaCloud\Dara\Model;

class resource extends Model
{
    /**
     * @var string
     */
    public $extra;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'extra'      => 'Extra',
        'resourceId' => 'ResourceId',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extra) {
            $res['Extra'] = $this->extra;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['Extra'])) {
            $model->extra = $map['Extra'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
