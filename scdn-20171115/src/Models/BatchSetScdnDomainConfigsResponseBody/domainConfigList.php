<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models\BatchSetScdnDomainConfigsResponseBody;

use AlibabaCloud\SDK\Scdn\V20171115\Models\BatchSetScdnDomainConfigsResponseBody\domainConfigList\domainConfigModel;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainConfigModel) {
            $res['DomainConfigModel'] = [];
            if (null !== $this->domainConfigModel && \is_array($this->domainConfigModel)) {
                $n = 0;
                foreach ($this->domainConfigModel as $item) {
                    $res['DomainConfigModel'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainConfigList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainConfigModel'])) {
            if (!empty($map['DomainConfigModel'])) {
                $model->domainConfigModel = [];
                $n                        = 0;
                foreach ($map['DomainConfigModel'] as $item) {
                    $model->domainConfigModel[$n++] = null !== $item ? domainConfigModel::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
