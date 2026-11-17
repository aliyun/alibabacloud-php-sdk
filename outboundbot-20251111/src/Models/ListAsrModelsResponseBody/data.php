<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\ListAsrModelsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nlsEngine;

    /**
     * @var string[]
     */
    public $supportedParams;
    protected $_name = [
        'model' => 'Model',
        'name' => 'Name',
        'nlsEngine' => 'NlsEngine',
        'supportedParams' => 'SupportedParams',
    ];

    public function validate()
    {
        if (\is_array($this->supportedParams)) {
            Model::validateArray($this->supportedParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nlsEngine) {
            $res['NlsEngine'] = $this->nlsEngine;
        }

        if (null !== $this->supportedParams) {
            if (\is_array($this->supportedParams)) {
                $res['SupportedParams'] = [];
                $n1 = 0;
                foreach ($this->supportedParams as $item1) {
                    $res['SupportedParams'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NlsEngine'])) {
            $model->nlsEngine = $map['NlsEngine'];
        }

        if (isset($map['SupportedParams'])) {
            if (!empty($map['SupportedParams'])) {
                $model->supportedParams = [];
                $n1 = 0;
                foreach ($map['SupportedParams'] as $item1) {
                    $model->supportedParams[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
