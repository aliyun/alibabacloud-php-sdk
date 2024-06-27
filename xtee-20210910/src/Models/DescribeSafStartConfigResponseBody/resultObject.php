<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafStartConfigResponseBody;

use AlibabaCloud\Tea\Model;

class resultObject extends Model
{
    /**
     * @var string[]
     */
    public $deviceTypes;

    /**
     * @var string[]
     */
    public $eventCodes;

    /**
     * @var string[]
     */
    public $languages;

    /**
     * @var string[]
     */
    public $serverRegions;
    protected $_name = [
        'deviceTypes'   => 'deviceTypes',
        'eventCodes'    => 'eventCodes',
        'languages'     => 'languages',
        'serverRegions' => 'serverRegions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceTypes) {
            $res['deviceTypes'] = $this->deviceTypes;
        }
        if (null !== $this->eventCodes) {
            $res['eventCodes'] = $this->eventCodes;
        }
        if (null !== $this->languages) {
            $res['languages'] = $this->languages;
        }
        if (null !== $this->serverRegions) {
            $res['serverRegions'] = $this->serverRegions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultObject
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['deviceTypes'])) {
            if (!empty($map['deviceTypes'])) {
                $model->deviceTypes = $map['deviceTypes'];
            }
        }
        if (isset($map['eventCodes'])) {
            if (!empty($map['eventCodes'])) {
                $model->eventCodes = $map['eventCodes'];
            }
        }
        if (isset($map['languages'])) {
            if (!empty($map['languages'])) {
                $model->languages = $map['languages'];
            }
        }
        if (isset($map['serverRegions'])) {
            if (!empty($map['serverRegions'])) {
                $model->serverRegions = $map['serverRegions'];
            }
        }

        return $model;
    }
}
