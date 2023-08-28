<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\GetNodeConfigResponseBody;

use AlibabaCloud\Tea\Model;

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
    public $minServicePercent;

    /**
     * @var bool
     */
    public $published;
    protected $_name = [
        'active'              => 'active',
        'dataDuplicateNumber' => 'dataDuplicateNumber',
        'dataFragmentNumber'  => 'dataFragmentNumber',
        'minServicePercent'   => 'minServicePercent',
        'published'           => 'published',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->minServicePercent) {
            $res['minServicePercent'] = $this->minServicePercent;
        }
        if (null !== $this->published) {
            $res['published'] = $this->published;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
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
        if (isset($map['minServicePercent'])) {
            $model->minServicePercent = $map['minServicePercent'];
        }
        if (isset($map['published'])) {
            $model->published = $map['published'];
        }

        return $model;
    }
}
