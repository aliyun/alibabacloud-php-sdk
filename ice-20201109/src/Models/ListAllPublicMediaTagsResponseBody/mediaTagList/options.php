<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListAllPublicMediaTagsResponseBody\mediaTagList;

use AlibabaCloud\Tea\Model;

class options extends Model
{
    /**
     * @description The option name in Chinese.
     *
     * @var string
     */
    public $optionChineseName;

    /**
     * @description The option name in English.
     *
     * @example Angry
     *
     * @var string
     */
    public $optionEnglishName;

    /**
     * @description The option ID.
     *
     * @example Angry
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return options
     */
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
