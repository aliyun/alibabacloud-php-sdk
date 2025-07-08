<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryExportSendRecordListNewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryExportSendRecordListNewResponseBody\list_\fcFileUpInsResponse;

class list_ extends Model
{
    /**
     * @var fcFileUpInsResponse[]
     */
    public $fcFileUpInsResponse;
    protected $_name = [
        'fcFileUpInsResponse' => 'FcFileUpInsResponse',
    ];

    public function validate()
    {
        if (\is_array($this->fcFileUpInsResponse)) {
            Model::validateArray($this->fcFileUpInsResponse);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fcFileUpInsResponse) {
            if (\is_array($this->fcFileUpInsResponse)) {
                $res['FcFileUpInsResponse'] = [];
                $n1 = 0;
                foreach ($this->fcFileUpInsResponse as $item1) {
                    $res['FcFileUpInsResponse'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FcFileUpInsResponse'])) {
            if (!empty($map['FcFileUpInsResponse'])) {
                $model->fcFileUpInsResponse = [];
                $n1 = 0;
                foreach ($map['FcFileUpInsResponse'] as $item1) {
                    $model->fcFileUpInsResponse[$n1] = fcFileUpInsResponse::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
