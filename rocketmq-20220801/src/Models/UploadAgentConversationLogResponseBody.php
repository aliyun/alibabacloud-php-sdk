<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RocketMQ\V20220801\Models;

use AlibabaCloud\Dara\Model;

class UploadAgentConversationLogResponseBody extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $sandboxPath;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'fileName' => 'fileName',
        'id' => 'id',
        'sandboxPath' => 'sandboxPath',
        'size' => 'size',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->sandboxPath) {
            $res['sandboxPath'] = $this->sandboxPath;
        }

        if (null !== $this->size) {
            $res['size'] = $this->size;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['sandboxPath'])) {
            $model->sandboxPath = $map['sandboxPath'];
        }

        if (isset($map['size'])) {
            $model->size = $map['size'];
        }

        return $model;
    }
}
