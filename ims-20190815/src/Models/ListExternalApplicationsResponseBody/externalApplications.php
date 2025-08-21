<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponseBody\externalApplications\externalApplication;

class externalApplications extends Model
{
    /**
     * @var externalApplication[]
     */
    public $externalApplication;
    protected $_name = [
        'externalApplication' => 'ExternalApplication',
    ];

    public function validate()
    {
        if (\is_array($this->externalApplication)) {
            Model::validateArray($this->externalApplication);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->externalApplication) {
            if (\is_array($this->externalApplication)) {
                $res['ExternalApplication'] = [];
                $n1 = 0;
                foreach ($this->externalApplication as $item1) {
                    $res['ExternalApplication'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ExternalApplication'])) {
            if (!empty($map['ExternalApplication'])) {
                $model->externalApplication = [];
                $n1 = 0;
                foreach ($map['ExternalApplication'] as $item1) {
                    $model->externalApplication[$n1] = externalApplication::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
