<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domainintl\V20171218\Models;

use AlibabaCloud\SDK\Domainintl\V20171218\Models\SaveBatchTaskForReserveDropListDomainRequest\domains;
use AlibabaCloud\Tea\Model;

class SaveBatchTaskForReserveDropListDomainRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $contactTemplateId;

    /**
     * @description This parameter is required.
     *
     * @var domains[]
     */
    public $domains;
    protected $_name = [
        'contactTemplateId' => 'ContactTemplateId',
        'domains'           => 'Domains',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactTemplateId) {
            $res['ContactTemplateId'] = $this->contactTemplateId;
        }
        if (null !== $this->domains) {
            $res['Domains'] = [];
            if (null !== $this->domains && \is_array($this->domains)) {
                $n = 0;
                foreach ($this->domains as $item) {
                    $res['Domains'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveBatchTaskForReserveDropListDomainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactTemplateId'])) {
            $model->contactTemplateId = $map['ContactTemplateId'];
        }
        if (isset($map['Domains'])) {
            if (!empty($map['Domains'])) {
                $model->domains = [];
                $n              = 0;
                foreach ($map['Domains'] as $item) {
                    $model->domains[$n++] = null !== $item ? domains::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
