<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoryDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $createdAt;

    /**
     * @var string
     */
    public $timestamp;

    /**
     * @var int
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $assistId;

    /**
     * @var string
     */
    public $ID;
    protected $_name = [
        'action'    => 'Action',
        'createdAt' => 'CreatedAt',
        'timestamp' => 'Timestamp',
        'updatedAt' => 'UpdatedAt',
        'assistId'  => 'AssistId',
        'ID'        => 'ID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->createdAt) {
            $res['CreatedAt'] = $this->createdAt;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->updatedAt) {
            $res['UpdatedAt'] = $this->updatedAt;
        }
        if (null !== $this->assistId) {
            $res['AssistId'] = $this->assistId;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['CreatedAt'])) {
            $model->createdAt = $map['CreatedAt'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['UpdatedAt'])) {
            $model->updatedAt = $map['UpdatedAt'];
        }
        if (isset($map['AssistId'])) {
            $model->assistId = $map['AssistId'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }

        return $model;
    }
}
