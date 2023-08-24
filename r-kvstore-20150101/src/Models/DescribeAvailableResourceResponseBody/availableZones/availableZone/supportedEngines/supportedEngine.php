<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeAvailableResourceResponseBody\availableZones\availableZone\supportedEngines\supportedEngine\supportedEditionTypes;
use AlibabaCloud\Tea\Model;

class supportedEngine extends Model
{
    /**
     * @description The database engine of the instance.
     *
     * @example Redis
     *
     * @var string
     */
    public $engine;

    /**
     * @description The available instance editions.
     *
     * @var supportedEditionTypes
     */
    public $supportedEditionTypes;
    protected $_name = [
        'engine'                => 'Engine',
        'supportedEditionTypes' => 'SupportedEditionTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->supportedEditionTypes) {
            $res['SupportedEditionTypes'] = null !== $this->supportedEditionTypes ? $this->supportedEditionTypes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngine
     */
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
