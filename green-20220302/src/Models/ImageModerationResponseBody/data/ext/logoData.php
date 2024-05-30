<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext;

use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\logoData\location;
use AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\logoData\logo;
use AlibabaCloud\Tea\Model;

class logoData extends Model
{
    /**
     * @var location
     */
    public $location;

    /**
     * @var logo[]
     */
    public $logo;
    protected $_name = [
        'location' => 'Location',
        'logo'     => 'Logo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toMap() : null;
        }
        if (null !== $this->logo) {
            $res['Logo'] = [];
            if (null !== $this->logo && \is_array($this->logo)) {
                $n = 0;
                foreach ($this->logo as $item) {
                    $res['Logo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logoData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }
        if (isset($map['Logo'])) {
            if (!empty($map['Logo'])) {
                $model->logo = [];
                $n           = 0;
                foreach ($map['Logo'] as $item) {
                    $model->logo[$n++] = null !== $item ? logo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
