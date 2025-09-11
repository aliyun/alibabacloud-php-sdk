<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\DescribeRegionsResponseBody;

use AlibabaCloud\Dara\Model;

class regions extends Model
{
    /**
     * @var string[]
     */
    public $dataRedundancyType;

    /**
     * @var string
     */
    public $internetEndpoint;

    /**
     * @var string
     */
    public $intranetEndpoint;

    /**
     * @var string
     */
    public $localName;

    /**
     * @var string
     */
    public $region;
    protected $_name = [
        'dataRedundancyType' => 'dataRedundancyType',
        'internetEndpoint' => 'internetEndpoint',
        'intranetEndpoint' => 'intranetEndpoint',
        'localName' => 'localName',
        'region' => 'region',
    ];

    public function validate()
    {
        if (\is_array($this->dataRedundancyType)) {
            Model::validateArray($this->dataRedundancyType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataRedundancyType) {
            if (\is_array($this->dataRedundancyType)) {
                $res['dataRedundancyType'] = [];
                $n1 = 0;
                foreach ($this->dataRedundancyType as $item1) {
                    $res['dataRedundancyType'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->internetEndpoint) {
            $res['internetEndpoint'] = $this->internetEndpoint;
        }

        if (null !== $this->intranetEndpoint) {
            $res['intranetEndpoint'] = $this->intranetEndpoint;
        }

        if (null !== $this->localName) {
            $res['localName'] = $this->localName;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
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
        if (isset($map['dataRedundancyType'])) {
            if (!empty($map['dataRedundancyType'])) {
                $model->dataRedundancyType = [];
                $n1 = 0;
                foreach ($map['dataRedundancyType'] as $item1) {
                    $model->dataRedundancyType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['internetEndpoint'])) {
            $model->internetEndpoint = $map['internetEndpoint'];
        }

        if (isset($map['intranetEndpoint'])) {
            $model->intranetEndpoint = $map['intranetEndpoint'];
        }

        if (isset($map['localName'])) {
            $model->localName = $map['localName'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        return $model;
    }
}
