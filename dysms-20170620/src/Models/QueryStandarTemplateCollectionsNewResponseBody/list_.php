<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandarTemplateCollectionsNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryStandarTemplateCollectionsNewResponseBody\list_\fcPartnerTemplateDTO;

class list_ extends Model
{
    /**
     * @var fcPartnerTemplateDTO[]
     */
    public $fcPartnerTemplateDTO;
    protected $_name = [
        'fcPartnerTemplateDTO' => 'FcPartnerTemplateDTO',
    ];

    public function validate()
    {
        if (\is_array($this->fcPartnerTemplateDTO)) {
            Model::validateArray($this->fcPartnerTemplateDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fcPartnerTemplateDTO) {
            if (\is_array($this->fcPartnerTemplateDTO)) {
                $res['FcPartnerTemplateDTO'] = [];
                $n1 = 0;
                foreach ($this->fcPartnerTemplateDTO as $item1) {
                    $res['FcPartnerTemplateDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FcPartnerTemplateDTO'])) {
            if (!empty($map['FcPartnerTemplateDTO'])) {
                $model->fcPartnerTemplateDTO = [];
                $n1 = 0;
                foreach ($map['FcPartnerTemplateDTO'] as $item1) {
                    $model->fcPartnerTemplateDTO[$n1] = fcPartnerTemplateDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
