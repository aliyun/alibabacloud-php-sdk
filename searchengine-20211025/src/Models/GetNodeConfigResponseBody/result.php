<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetNodeConfigResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var int
     */
    public $dataDuplicateNumber;

    /**
     * @var int
     */
    public $dataFragmentNumber;

    /**
     * @var int
     */
    public $flowRatio;

    /**
     * @var int
     */
    public $minServicePercent;

    /**
     * @var bool
     */
    public $published;
    protected $_name = [
        'active' => 'active',
        'dataDuplicateNumber' => 'dataDuplicateNumber',
        'dataFragmentNumber' => 'dataFragmentNumber',
        'flowRatio' => 'flowRatio',
        'minServicePercent' => 'minServicePercent',
        'published' => 'published',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['active'] = $this->active;
        }

        if (null !== $this->dataDuplicateNumber) {
            $res['dataDuplicateNumber'] = $this->dataDuplicateNumber;
        }

        if (null !== $this->dataFragmentNumber) {
            $res['dataFragmentNumber'] = $this->dataFragmentNumber;
        }

        if (null !== $this->flowRatio) {
            $res['flowRatio'] = $this->flowRatio;
        }

        if (null !== $this->minServicePercent) {
            $res['minServicePercent'] = $this->minServicePercent;
        }

        if (null !== $this->published) {
            $res['published'] = $this->published;
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
        if (isset($map['active'])) {
            $model->active = $map['active'];
        }

        if (isset($map['dataDuplicateNumber'])) {
            $model->dataDuplicateNumber = $map['dataDuplicateNumber'];
        }

        if (isset($map['dataFragmentNumber'])) {
            $model->dataFragmentNumber = $map['dataFragmentNumber'];
        }

        if (isset($map['flowRatio'])) {
            $model->flowRatio = $map['flowRatio'];
        }

        if (isset($map['minServicePercent'])) {
            $model->minServicePercent = $map['minServicePercent'];
        }

        if (isset($map['published'])) {
            $model->published = $map['published'];
        }

        return $model;
    }
}
