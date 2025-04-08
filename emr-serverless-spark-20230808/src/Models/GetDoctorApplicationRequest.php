<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;

class GetDoctorApplicationRequest extends Model
{
    /**
     * @var string
     */
    public $locale;

    /**
     * @var string
     */
    public $queryTime;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'locale' => 'locale',
        'queryTime' => 'queryTime',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->locale) {
            $res['locale'] = $this->locale;
        }

        if (null !== $this->queryTime) {
            $res['queryTime'] = $this->queryTime;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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
        if (isset($map['locale'])) {
            $model->locale = $map['locale'];
        }

        if (isset($map['queryTime'])) {
            $model->queryTime = $map['queryTime'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
