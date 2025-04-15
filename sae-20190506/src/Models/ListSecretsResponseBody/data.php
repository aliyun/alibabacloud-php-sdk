<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sae\V20190506\Models\ListSecretsResponseBody\data\secrets;

class data extends Model
{
    /**
     * @var secrets[]
     */
    public $secrets;
    protected $_name = [
        'secrets' => 'Secrets',
    ];

    public function validate()
    {
        if (\is_array($this->secrets)) {
            Model::validateArray($this->secrets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->secrets) {
            if (\is_array($this->secrets)) {
                $res['Secrets'] = [];
                $n1 = 0;
                foreach ($this->secrets as $item1) {
                    $res['Secrets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Secrets'])) {
            if (!empty($map['Secrets'])) {
                $model->secrets = [];
                $n1 = 0;
                foreach ($map['Secrets'] as $item1) {
                    $model->secrets[$n1++] = secrets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
