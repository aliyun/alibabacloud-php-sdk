<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PbcRelationItem extends Model
{
    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $developer;

    /**
     * @var string
     */
    public $pbcName;

    /**
     * @var string
     */
    public $pbcVersion;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'company' => 'company',
        'developer' => 'developer',
        'pbcName' => 'pbcName',
        'pbcVersion' => 'pbcVersion',
        'summary' => 'summary',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->company) {
            $res['company'] = $this->company;
        }

        if (null !== $this->developer) {
            $res['developer'] = $this->developer;
        }

        if (null !== $this->pbcName) {
            $res['pbcName'] = $this->pbcName;
        }

        if (null !== $this->pbcVersion) {
            $res['pbcVersion'] = $this->pbcVersion;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
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
        if (isset($map['company'])) {
            $model->company = $map['company'];
        }

        if (isset($map['developer'])) {
            $model->developer = $map['developer'];
        }

        if (isset($map['pbcName'])) {
            $model->pbcName = $map['pbcName'];
        }

        if (isset($map['pbcVersion'])) {
            $model->pbcVersion = $map['pbcVersion'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        return $model;
    }
}
