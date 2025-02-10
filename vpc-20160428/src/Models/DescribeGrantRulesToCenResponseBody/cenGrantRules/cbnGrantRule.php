<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeGrantRulesToCenResponseBody\cenGrantRules;

use AlibabaCloud\Dara\Model;

class cbnGrantRule extends Model
{
    /**
     * @var string
     */
    public $cenInstanceId;
    /**
     * @var int
     */
    public $cenOwnerId;
    /**
     * @var string
     */
    public $creationTime;
    protected $_name = [
        'cenInstanceId' => 'CenInstanceId',
        'cenOwnerId'    => 'CenOwnerId',
        'creationTime'  => 'CreationTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenInstanceId) {
            $res['CenInstanceId'] = $this->cenInstanceId;
        }

        if (null !== $this->cenOwnerId) {
            $res['CenOwnerId'] = $this->cenOwnerId;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
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
        if (isset($map['CenInstanceId'])) {
            $model->cenInstanceId = $map['CenInstanceId'];
        }

        if (isset($map['CenOwnerId'])) {
            $model->cenOwnerId = $map['CenOwnerId'];
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        return $model;
    }
}
