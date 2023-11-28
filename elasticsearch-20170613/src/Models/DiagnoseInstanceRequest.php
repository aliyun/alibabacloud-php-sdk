<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class DiagnoseInstanceRequest extends Model
{
    /**
     * @description The timestamp when the diagnostic report was generated.
     *
     * @example 5A2CFF0E-5718-45B5-9D4D-70B3FF****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $diagnoseItems;

    /**
     * @var string[]
     */
    public $indices;

    /**
     * @example ALL
     *
     * @var string
     */
    public $type;

    /**
     * @description The returned data.
     *
     * @example en
     *
     * @var string
     */
    public $lang;
    protected $_name = [
        'clientToken'   => 'ClientToken',
        'diagnoseItems' => 'diagnoseItems',
        'indices'       => 'indices',
        'type'          => 'type',
        'lang'          => 'lang',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->diagnoseItems) {
            $res['diagnoseItems'] = $this->diagnoseItems;
        }
        if (null !== $this->indices) {
            $res['indices'] = $this->indices;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiagnoseInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['diagnoseItems'])) {
            if (!empty($map['diagnoseItems'])) {
                $model->diagnoseItems = $map['diagnoseItems'];
            }
        }
        if (isset($map['indices'])) {
            if (!empty($map['indices'])) {
                $model->indices = $map['indices'];
            }
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        return $model;
    }
}
