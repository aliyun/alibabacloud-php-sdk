<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetErrorsResponseBody\model;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var int
     */
    public $clientTime;

    /**
     * @var string
     */
    public $did;

    /**
     * @var string
     */
    public $utdid;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientTime' => 'ClientTime',
        'did' => 'Did',
        'utdid' => 'Utdid',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientTime) {
            $res['ClientTime'] = $this->clientTime;
        }

        if (null !== $this->did) {
            $res['Did'] = $this->did;
        }

        if (null !== $this->utdid) {
            $res['Utdid'] = $this->utdid;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['ClientTime'])) {
            $model->clientTime = $map['ClientTime'];
        }

        if (isset($map['Did'])) {
            $model->did = $map['Did'];
        }

        if (isset($map['Utdid'])) {
            $model->utdid = $map['Utdid'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
