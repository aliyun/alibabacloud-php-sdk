<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetYaoChiAgentResponseBody;

use AlibabaCloud\Dara\Model;

class subAgentCall extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subAgentId;

    /**
     * @var string
     */
    public $subAgentName;
    protected $_name = [
        'status' => 'Status',
        'subAgentId' => 'SubAgentId',
        'subAgentName' => 'SubAgentName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subAgentId) {
            $res['SubAgentId'] = $this->subAgentId;
        }

        if (null !== $this->subAgentName) {
            $res['SubAgentName'] = $this->subAgentName;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubAgentId'])) {
            $model->subAgentId = $map['SubAgentId'];
        }

        if (isset($map['SubAgentName'])) {
            $model->subAgentName = $map['SubAgentName'];
        }

        return $model;
    }
}
