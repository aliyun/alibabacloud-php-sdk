<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListAlertsResponseBody;

use AlibabaCloud\Dara\Model;

class alerts extends Model
{
    /**
     * @var string
     */
    public $alertRecord;

    /**
     * @var string
     */
    public $alertUuid;
    protected $_name = [
        'alertRecord' => 'AlertRecord',
        'alertUuid' => 'AlertUuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertRecord) {
            $res['AlertRecord'] = $this->alertRecord;
        }

        if (null !== $this->alertUuid) {
            $res['AlertUuid'] = $this->alertUuid;
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
        if (isset($map['AlertRecord'])) {
            $model->alertRecord = $map['AlertRecord'];
        }

        if (isset($map['AlertUuid'])) {
            $model->alertUuid = $map['AlertUuid'];
        }

        return $model;
    }
}
