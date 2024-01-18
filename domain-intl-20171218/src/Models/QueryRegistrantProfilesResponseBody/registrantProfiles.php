<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryRegistrantProfilesResponseBody;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\QueryRegistrantProfilesResponseBody\registrantProfiles\registrantProfile;
use AlibabaCloud\Tea\Model;

class registrantProfiles extends Model
{
    /**
     * @var registrantProfile[]
     */
    public $registrantProfile;
    protected $_name = [
        'registrantProfile' => 'RegistrantProfile',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registrantProfile) {
            $res['RegistrantProfile'] = [];
            if (null !== $this->registrantProfile && \is_array($this->registrantProfile)) {
                $n = 0;
                foreach ($this->registrantProfile as $item) {
                    $res['RegistrantProfile'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return registrantProfiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistrantProfile'])) {
            if (!empty($map['RegistrantProfile'])) {
                $model->registrantProfile = [];
                $n                        = 0;
                foreach ($map['RegistrantProfile'] as $item) {
                    $model->registrantProfile[$n++] = null !== $item ? registrantProfile::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
