<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogHubAttributeResponseBody\loghubInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogHubAttributeResponseBody\loghubInfo\logHubStores\logHubStore;

class logHubStores extends Model
{
    /**
     * @var logHubStore[]
     */
    public $logHubStore;
    protected $_name = [
        'logHubStore' => 'LogHubStore',
    ];

    public function validate()
    {
        if (\is_array($this->logHubStore)) {
            Model::validateArray($this->logHubStore);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logHubStore) {
            if (\is_array($this->logHubStore)) {
                $res['LogHubStore'] = [];
                $n1 = 0;
                foreach ($this->logHubStore as $item1) {
                    $res['LogHubStore'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['LogHubStore'])) {
            if (!empty($map['LogHubStore'])) {
                $model->logHubStore = [];
                $n1 = 0;
                foreach ($map['LogHubStore'] as $item1) {
                    $model->logHubStore[$n1] = logHubStore::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
