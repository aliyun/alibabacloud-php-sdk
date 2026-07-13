<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiRegistrantsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ListAtiRegistrantsResponseBody\registrants\registrant;

class registrants extends Model
{
    /**
     * @var registrant[]
     */
    public $registrant;
    protected $_name = [
        'registrant' => 'Registrant',
    ];

    public function validate()
    {
        if (\is_array($this->registrant)) {
            Model::validateArray($this->registrant);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->registrant) {
            if (\is_array($this->registrant)) {
                $res['Registrant'] = [];
                $n1 = 0;
                foreach ($this->registrant as $item1) {
                    $res['Registrant'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Registrant'])) {
            if (!empty($map['Registrant'])) {
                $model->registrant = [];
                $n1 = 0;
                foreach ($map['Registrant'] as $item1) {
                    $model->registrant[$n1] = registrant::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
