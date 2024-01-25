<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class AddScenarioRequest extends Model
{
    /**
     * @var int
     */
    public $alertSettingId;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operaUid;
    protected $_name = [
        'alertSettingId' => 'AlertSettingId',
        'level'          => 'Level',
        'name'           => 'Name',
        'operaUid'       => 'OperaUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertSettingId) {
            $res['AlertSettingId'] = $this->alertSettingId;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddScenarioRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertSettingId'])) {
            $model->alertSettingId = $map['AlertSettingId'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }

        return $model;
    }
}
