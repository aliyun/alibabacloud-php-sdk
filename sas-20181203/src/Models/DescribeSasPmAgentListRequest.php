<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSasPmAgentListRequest extends Model
{
    /**
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @example inet-cb7ae5ee-b2bc-4581-b616-62495f5d****,inet-37cf0e4f-55cc-4b84-8073-b348b4b4****
     *
     * @var string
     */
    public $uuids;
    protected $_name = [
        'lang'  => 'Lang',
        'uuids' => 'Uuids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->uuids) {
            $res['Uuids'] = $this->uuids;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSasPmAgentListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Uuids'])) {
            $model->uuids = $map['Uuids'];
        }

        return $model;
    }
}
