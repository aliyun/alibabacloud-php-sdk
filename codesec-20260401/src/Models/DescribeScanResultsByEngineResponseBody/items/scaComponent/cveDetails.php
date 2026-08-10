<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CodeSec\V20260401\Models\DescribeScanResultsByEngineResponseBody\items\scaComponent;

use AlibabaCloud\Dara\Model;

class cveDetails extends Model
{
    /**
     * @var string
     */
    public $cveId;

    /**
     * @var float
     */
    public $cvss;

    /**
     * @var string
     */
    public $cvssVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string[]
     */
    public $references;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'cveId' => 'cveId',
        'cvss' => 'cvss',
        'cvssVersion' => 'cvssVersion',
        'description' => 'description',
        'references' => 'references',
        'severity' => 'severity',
    ];

    public function validate()
    {
        if (\is_array($this->references)) {
            Model::validateArray($this->references);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cveId) {
            $res['cveId'] = $this->cveId;
        }

        if (null !== $this->cvss) {
            $res['cvss'] = $this->cvss;
        }

        if (null !== $this->cvssVersion) {
            $res['cvssVersion'] = $this->cvssVersion;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->references) {
            if (\is_array($this->references)) {
                $res['references'] = [];
                $n1 = 0;
                foreach ($this->references as $item1) {
                    $res['references'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
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
        if (isset($map['cveId'])) {
            $model->cveId = $map['cveId'];
        }

        if (isset($map['cvss'])) {
            $model->cvss = $map['cvss'];
        }

        if (isset($map['cvssVersion'])) {
            $model->cvssVersion = $map['cvssVersion'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['references'])) {
            if (!empty($map['references'])) {
                $model->references = [];
                $n1 = 0;
                foreach ($map['references'] as $item1) {
                    $model->references[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        return $model;
    }
}
