<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListAssetSelectionSelectedTargetResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetName;
    protected $_name = [
        'targetId'   => 'TargetId',
        'targetName' => 'TargetName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
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
        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        return $model;
    }
}
