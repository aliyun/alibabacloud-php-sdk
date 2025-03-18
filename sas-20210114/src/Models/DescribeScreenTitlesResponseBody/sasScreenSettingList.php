<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenTitlesResponseBody;

use AlibabaCloud\Tea\Model;

class sasScreenSettingList extends Model
{
    /**
     * @example 3267
     *
     * @var int
     */
    public $screenID;

    /**
     * @example titlexxx
     *
     * @var string
     */
    public $screenTitle;
    protected $_name = [
        'screenID' => 'ScreenID',
        'screenTitle' => 'ScreenTitle',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->screenID) {
            $res['ScreenID'] = $this->screenID;
        }
        if (null !== $this->screenTitle) {
            $res['ScreenTitle'] = $this->screenTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sasScreenSettingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ScreenID'])) {
            $model->screenID = $map['ScreenID'];
        }
        if (isset($map['ScreenTitle'])) {
            $model->screenTitle = $map['ScreenTitle'];
        }

        return $model;
    }
}
