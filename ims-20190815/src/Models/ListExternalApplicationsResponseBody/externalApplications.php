<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponseBody;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListExternalApplicationsResponseBody\externalApplications\externalApplication;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->externalApplication) {
            $res['ExternalApplication'] = [];
            if (null !== $this->externalApplication && \is_array($this->externalApplication)) {
                $n = 0;
                foreach ($this->externalApplication as $item) {
                    $res['ExternalApplication'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return externalApplications
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExternalApplication'])) {
            if (!empty($map['ExternalApplication'])) {
                $model->externalApplication = [];
                $n                          = 0;
                foreach ($map['ExternalApplication'] as $item) {
                    $model->externalApplication[$n++] = null !== $item ? externalApplication::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
