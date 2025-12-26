<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAILangStudio\V20240710\Models\CreateKnowledgeBaseRequest;

use AlibabaCloud\Dara\Model;

class embeddingConfig extends Model
{
    /**
     * @var string
     */
    public $connectionId;

    /**
     * @var string
     */
    public $model;
    protected $_name = [
        'connectionId' => 'ConnectionId',
        'model' => 'Model',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionId) {
            $res['ConnectionId'] = $this->connectionId;
        }

        if (null !== $this->model) {
            $res['Model'] = $this->model;
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
        if (isset($map['ConnectionId'])) {
            $model->connectionId = $map['ConnectionId'];
        }

        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        return $model;
    }
}
