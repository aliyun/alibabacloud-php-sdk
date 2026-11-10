<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wss\V20211221\Models\DescribeAICallDetailsResponseBody\callDetails;

use AlibabaCloud\Dara\Model;

class pointsBreakdown extends Model
{
    /**
     * @var string
     */
    public $explicitCacheCreation;

    /**
     * @var string
     */
    public $explicitCacheHit;

    /**
     * @var string
     */
    public $implicitCacheHit;

    /**
     * @var string
     */
    public $normalInput;

    /**
     * @var string
     */
    public $output;
    protected $_name = [
        'explicitCacheCreation' => 'ExplicitCacheCreation',
        'explicitCacheHit' => 'ExplicitCacheHit',
        'implicitCacheHit' => 'ImplicitCacheHit',
        'normalInput' => 'NormalInput',
        'output' => 'Output',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->explicitCacheCreation) {
            $res['ExplicitCacheCreation'] = $this->explicitCacheCreation;
        }

        if (null !== $this->explicitCacheHit) {
            $res['ExplicitCacheHit'] = $this->explicitCacheHit;
        }

        if (null !== $this->implicitCacheHit) {
            $res['ImplicitCacheHit'] = $this->implicitCacheHit;
        }

        if (null !== $this->normalInput) {
            $res['NormalInput'] = $this->normalInput;
        }

        if (null !== $this->output) {
            $res['Output'] = $this->output;
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
        if (isset($map['ExplicitCacheCreation'])) {
            $model->explicitCacheCreation = $map['ExplicitCacheCreation'];
        }

        if (isset($map['ExplicitCacheHit'])) {
            $model->explicitCacheHit = $map['ExplicitCacheHit'];
        }

        if (isset($map['ImplicitCacheHit'])) {
            $model->implicitCacheHit = $map['ImplicitCacheHit'];
        }

        if (isset($map['NormalInput'])) {
            $model->normalInput = $map['NormalInput'];
        }

        if (isset($map['Output'])) {
            $model->output = $map['Output'];
        }

        return $model;
    }
}
