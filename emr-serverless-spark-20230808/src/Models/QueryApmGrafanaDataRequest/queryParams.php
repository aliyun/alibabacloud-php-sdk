<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\QueryApmGrafanaDataRequest;

use AlibabaCloud\Dara\Model;

class queryParams extends Model
{
    /**
     * @var int
     */
    public $panelId;

    /**
     * @var string
     */
    public $refId;

    /**
     * @var string
     */
    public $variableName;
    protected $_name = [
        'panelId' => 'panelId',
        'refId' => 'refId',
        'variableName' => 'variableName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->panelId) {
            $res['panelId'] = $this->panelId;
        }

        if (null !== $this->refId) {
            $res['refId'] = $this->refId;
        }

        if (null !== $this->variableName) {
            $res['variableName'] = $this->variableName;
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
        if (isset($map['panelId'])) {
            $model->panelId = $map['panelId'];
        }

        if (isset($map['refId'])) {
            $model->refId = $map['refId'];
        }

        if (isset($map['variableName'])) {
            $model->variableName = $map['variableName'];
        }

        return $model;
    }
}
