<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveSuspEventUserSettingRequest extends Model
{
    /**
     * @description The data source of the exception. Set the value to sas.
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The severities of alert notifications. Valid values:
     *
     *   **remind**
     *   **suspicious**
     *   **serious**
     *
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
