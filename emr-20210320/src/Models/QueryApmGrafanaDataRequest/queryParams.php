<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models\QueryApmGrafanaDataRequest;

use AlibabaCloud\Tea\Model;

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
        'panelId'      => 'PanelId',
        'refId'        => 'RefId',
        'variableName' => 'VariableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->panelId) {
            $res['PanelId'] = $this->panelId;
        }
        if (null !== $this->refId) {
            $res['RefId'] = $this->refId;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PanelId'])) {
            $model->panelId = $map['PanelId'];
        }
        if (isset($map['RefId'])) {
            $model->refId = $map['RefId'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }

        return $model;
    }
}
