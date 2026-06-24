<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqpopen\V20191212\Models\ListOpenSourcePermissionsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliyunUserId;

    /**
     * @var string
     */
    public $CInstanceId;

    /**
     * @var string
     */
    public $configure;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $read;

    /**
     * @var string
     */
    public $vhost;

    /**
     * @var string
     */
    public $write;
    protected $_name = [
        'aliyunUserId' => 'AliyunUserId',
        'CInstanceId' => 'CInstanceId',
        'configure' => 'Configure',
        'name' => 'Name',
        'read' => 'Read',
        'vhost' => 'Vhost',
        'write' => 'Write',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliyunUserId) {
            $res['AliyunUserId'] = $this->aliyunUserId;
        }

        if (null !== $this->CInstanceId) {
            $res['CInstanceId'] = $this->CInstanceId;
        }

        if (null !== $this->configure) {
            $res['Configure'] = $this->configure;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->read) {
            $res['Read'] = $this->read;
        }

        if (null !== $this->vhost) {
            $res['Vhost'] = $this->vhost;
        }

        if (null !== $this->write) {
            $res['Write'] = $this->write;
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
        if (isset($map['AliyunUserId'])) {
            $model->aliyunUserId = $map['AliyunUserId'];
        }

        if (isset($map['CInstanceId'])) {
            $model->CInstanceId = $map['CInstanceId'];
        }

        if (isset($map['Configure'])) {
            $model->configure = $map['Configure'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Read'])) {
            $model->read = $map['Read'];
        }

        if (isset($map['Vhost'])) {
            $model->vhost = $map['Vhost'];
        }

        if (isset($map['Write'])) {
            $model->write = $map['Write'];
        }

        return $model;
    }
}
