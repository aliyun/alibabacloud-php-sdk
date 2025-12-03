<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenTitlesResponseBody;

use AlibabaCloud\Dara\Model;

class sasScreenSettingList extends Model
{
    /**
     * @var int
     */
    public $screenID;

    /**
     * @var string
     */
    public $screenTitle;
    protected $_name = [
        'screenID' => 'ScreenID',
        'screenTitle' => 'ScreenTitle',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
