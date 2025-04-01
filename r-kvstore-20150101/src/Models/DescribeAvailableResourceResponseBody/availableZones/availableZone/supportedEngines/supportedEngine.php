<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes;

class supportedEngine extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var supportedEditionTypes
     */
    public $supportedEditionTypes;
    protected $_name = [
        'engine' => 'Engine',
        'supportedEditionTypes' => 'SupportedEditionTypes',
    ];

    public function validate()
    {
        if (null !== $this->supportedEditionTypes) {
            $this->supportedEditionTypes->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }

        if (null !== $this->supportedEditionTypes) {
            $res['SupportedEditionTypes'] = null !== $this->supportedEditionTypes ? $this->supportedEditionTypes->toArray($noStream) : $this->supportedEditionTypes;
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
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }

        if (isset($map['SupportedEditionTypes'])) {
            $model->supportedEditionTypes = supportedEditionTypes::fromMap($map['SupportedEditionTypes']);
        }

        return $model;
    }
}
