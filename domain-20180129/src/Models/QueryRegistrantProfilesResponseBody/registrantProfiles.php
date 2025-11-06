<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryRegistrantProfilesResponseBody\registrantProfiles\registrantProfile;

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
        if (\is_array($this->registrantProfile)) {
            Model::validateArray($this->registrantProfile);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registrantProfile) {
            if (\is_array($this->registrantProfile)) {
                $res['RegistrantProfile'] = [];
                $n1 = 0;
                foreach ($this->registrantProfile as $item1) {
                    $res['RegistrantProfile'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['RegistrantProfile'])) {
            if (!empty($map['RegistrantProfile'])) {
                $model->registrantProfile = [];
                $n1 = 0;
                foreach ($map['RegistrantProfile'] as $item1) {
                    $model->registrantProfile[$n1] = registrantProfile::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
