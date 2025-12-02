<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220926\Models;

use AlibabaCloud\Dara\Model;

class AddKeywordsToLibRequest extends Model
{
    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $keywordsObject;

    /**
     * @var string
     */
    public $libId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'keywords' => 'Keywords',
        'keywordsObject' => 'KeywordsObject',
        'libId' => 'LibId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }

        if (null !== $this->keywordsObject) {
            $res['KeywordsObject'] = $this->keywordsObject;
        }

        if (null !== $this->libId) {
            $res['LibId'] = $this->libId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }

        if (isset($map['KeywordsObject'])) {
            $model->keywordsObject = $map['KeywordsObject'];
        }

        if (isset($map['LibId'])) {
            $model->libId = $map['LibId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
