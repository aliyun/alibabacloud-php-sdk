<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class ListSentinelBlockFallbackDefinitionsRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $appName;
    /**
     * @var int[]
     */
    public $classificationSet;
    /**
     * @var string
     */
    public $namespace;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'appName'           => 'AppName',
        'classificationSet' => 'ClassificationSet',
        'namespace'         => 'Namespace',
    ];

    public function validate()
    {
        if (\is_array($this->classificationSet)) {
            Model::validateArray($this->classificationSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->classificationSet) {
            if (\is_array($this->classificationSet)) {
                $res['ClassificationSet'] = [];
                $n1                       = 0;
                foreach ($this->classificationSet as $item1) {
                    $res['ClassificationSet'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ClassificationSet'])) {
            if (!empty($map['ClassificationSet'])) {
                $model->classificationSet = [];
                $n1                       = 0;
                foreach ($map['ClassificationSet'] as $item1) {
                    $model->classificationSet[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        return $model;
    }
}
