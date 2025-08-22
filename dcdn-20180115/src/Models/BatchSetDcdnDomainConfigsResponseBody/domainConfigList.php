<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\BatchSetDcdnDomainConfigsResponseBody\domainConfigList\domainConfigModel;

class domainConfigList extends Model
{
    /**
     * @var domainConfigModel[]
     */
    public $domainConfigModel;
    protected $_name = [
        'domainConfigModel' => 'DomainConfigModel',
    ];

    public function validate()
    {
        if (\is_array($this->domainConfigModel)) {
            Model::validateArray($this->domainConfigModel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainConfigModel) {
            if (\is_array($this->domainConfigModel)) {
                $res['DomainConfigModel'] = [];
                $n1 = 0;
                foreach ($this->domainConfigModel as $item1) {
                    $res['DomainConfigModel'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainConfigModel'])) {
            if (!empty($map['DomainConfigModel'])) {
                $model->domainConfigModel = [];
                $n1 = 0;
                foreach ($map['DomainConfigModel'] as $item1) {
                    $model->domainConfigModel[$n1] = domainConfigModel::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
