<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\logoData\location;
use AlibabaCloud\SDK\Green\V20220302\Models\VideoModerationResultResponseBody\data\frameResult\frames\results\logoData\logo;

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
        'logo' => 'Logo',
    ];

    public function validate()
    {
        if (null !== $this->location) {
            $this->location->validate();
        }
        if (\is_array($this->logo)) {
            Model::validateArray($this->logo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = null !== $this->location ? $this->location->toArray($noStream) : $this->location;
        }

        if (null !== $this->logo) {
            if (\is_array($this->logo)) {
                $res['Logo'] = [];
                $n1 = 0;
                foreach ($this->logo as $item1) {
                    $res['Logo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Location'])) {
            $model->location = location::fromMap($map['Location']);
        }

        if (isset($map['Logo'])) {
            if (!empty($map['Logo'])) {
                $model->logo = [];
                $n1 = 0;
                foreach ($map['Logo'] as $item1) {
                    $model->logo[$n1++] = logo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
