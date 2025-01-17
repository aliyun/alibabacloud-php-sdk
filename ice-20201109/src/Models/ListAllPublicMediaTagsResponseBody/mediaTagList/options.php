<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody\mediaTagList;

use AlibabaCloud\Dara\Model;

class options extends Model
{
    /**
     * @var string
     */
    public $optionChineseName;
    /**
     * @var string
     */
    public $optionEnglishName;
    /**
     * @var string
     */
    public $optionId;
    protected $_name = [
        'optionChineseName' => 'OptionChineseName',
        'optionEnglishName' => 'OptionEnglishName',
        'optionId'          => 'OptionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->optionChineseName) {
            $res['OptionChineseName'] = $this->optionChineseName;
        }

        if (null !== $this->optionEnglishName) {
            $res['OptionEnglishName'] = $this->optionEnglishName;
        }

        if (null !== $this->optionId) {
            $res['OptionId'] = $this->optionId;
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
        if (isset($map['OptionChineseName'])) {
            $model->optionChineseName = $map['OptionChineseName'];
        }

        if (isset($map['OptionEnglishName'])) {
            $model->optionEnglishName = $map['OptionEnglishName'];
        }

        if (isset($map['OptionId'])) {
            $model->optionId = $map['OptionId'];
        }

        return $model;
    }
}
