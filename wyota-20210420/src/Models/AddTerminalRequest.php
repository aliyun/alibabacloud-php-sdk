<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Tea\Model;

class AddTerminalRequest extends Model
{
    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $mainBizType;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $terminalGroupId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alias' => 'Alias',
        'clientType' => 'ClientType',
        'mainBizType' => 'MainBizType',
        'serialNumber' => 'SerialNumber',
        'terminalGroupId' => 'TerminalGroupId',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->mainBizType) {
            $res['MainBizType'] = $this->mainBizType;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->terminalGroupId) {
            $res['TerminalGroupId'] = $this->terminalGroupId;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddTerminalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['MainBizType'])) {
            $model->mainBizType = $map['MainBizType'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['TerminalGroupId'])) {
            $model->terminalGroupId = $map['TerminalGroupId'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
