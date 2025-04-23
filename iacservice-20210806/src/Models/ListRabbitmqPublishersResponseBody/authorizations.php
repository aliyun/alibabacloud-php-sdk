<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListRabbitmqPublishersResponseBody;

use AlibabaCloud\Dara\Model;

class authorizations extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $exchangeName;

    /**
     * @var string
     */
    public $exchangeType;

    /**
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $publisherId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $virtualHost;
    protected $_name = [
        'createTime' => 'createTime',
        'description' => 'description',
        'exchangeName' => 'exchangeName',
        'exchangeType' => 'exchangeType',
        'hostName' => 'hostName',
        'name' => 'name',
        'port' => 'port',
        'publisherId' => 'publisherId',
        'userName' => 'userName',
        'virtualHost' => 'virtualHost',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->exchangeName) {
            $res['exchangeName'] = $this->exchangeName;
        }

        if (null !== $this->exchangeType) {
            $res['exchangeType'] = $this->exchangeType;
        }

        if (null !== $this->hostName) {
            $res['hostName'] = $this->hostName;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->port) {
            $res['port'] = $this->port;
        }

        if (null !== $this->publisherId) {
            $res['publisherId'] = $this->publisherId;
        }

        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }

        if (null !== $this->virtualHost) {
            $res['virtualHost'] = $this->virtualHost;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['exchangeName'])) {
            $model->exchangeName = $map['exchangeName'];
        }

        if (isset($map['exchangeType'])) {
            $model->exchangeType = $map['exchangeType'];
        }

        if (isset($map['hostName'])) {
            $model->hostName = $map['hostName'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['port'])) {
            $model->port = $map['port'];
        }

        if (isset($map['publisherId'])) {
            $model->publisherId = $map['publisherId'];
        }

        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }

        if (isset($map['virtualHost'])) {
            $model->virtualHost = $map['virtualHost'];
        }

        return $model;
    }
}
