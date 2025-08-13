<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSafStartConfigResponseBody;

use AlibabaCloud\Dara\Model;

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
        'deviceTypes' => 'deviceTypes',
        'eventCodes' => 'eventCodes',
        'languages' => 'languages',
        'serverRegions' => 'serverRegions',
    ];

    public function validate()
    {
        if (\is_array($this->deviceTypes)) {
            Model::validateArray($this->deviceTypes);
        }
        if (\is_array($this->eventCodes)) {
            Model::validateArray($this->eventCodes);
        }
        if (\is_array($this->languages)) {
            Model::validateArray($this->languages);
        }
        if (\is_array($this->serverRegions)) {
            Model::validateArray($this->serverRegions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceTypes) {
            if (\is_array($this->deviceTypes)) {
                $res['deviceTypes'] = [];
                $n1 = 0;
                foreach ($this->deviceTypes as $item1) {
                    $res['deviceTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventCodes) {
            if (\is_array($this->eventCodes)) {
                $res['eventCodes'] = [];
                $n1 = 0;
                foreach ($this->eventCodes as $item1) {
                    $res['eventCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->languages) {
            if (\is_array($this->languages)) {
                $res['languages'] = [];
                $n1 = 0;
                foreach ($this->languages as $item1) {
                    $res['languages'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->serverRegions) {
            if (\is_array($this->serverRegions)) {
                $res['serverRegions'] = [];
                $n1 = 0;
                foreach ($this->serverRegions as $item1) {
                    $res['serverRegions'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['deviceTypes'])) {
            if (!empty($map['deviceTypes'])) {
                $model->deviceTypes = [];
                $n1 = 0;
                foreach ($map['deviceTypes'] as $item1) {
                    $model->deviceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['eventCodes'])) {
            if (!empty($map['eventCodes'])) {
                $model->eventCodes = [];
                $n1 = 0;
                foreach ($map['eventCodes'] as $item1) {
                    $model->eventCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['languages'])) {
            if (!empty($map['languages'])) {
                $model->languages = [];
                $n1 = 0;
                foreach ($map['languages'] as $item1) {
                    $model->languages[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['serverRegions'])) {
            if (!empty($map['serverRegions'])) {
                $model->serverRegions = [];
                $n1 = 0;
                foreach ($map['serverRegions'] as $item1) {
                    $model->serverRegions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
