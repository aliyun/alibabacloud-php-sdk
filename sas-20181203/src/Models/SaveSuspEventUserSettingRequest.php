<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveSuspEventUserSettingRequest extends Model
{
    /**
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @example suspicious,serious,remind
     *
     * @var string
     */
    public $levelsOn;
    protected $_name = [
        'from'     => 'From',
        'levelsOn' => 'LevelsOn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->levelsOn) {
            $res['LevelsOn'] = $this->levelsOn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveSuspEventUserSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['LevelsOn'])) {
            $model->levelsOn = $map['LevelsOn'];
        }

        return $model;
    }
}
