<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListDomainResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\ListDomainResponseBody\domainInfoList\toolList;

class domainInfoList extends Model
{
    /**
     * @var string
     */
    public $domainCode;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $toolCount;

    /**
     * @var toolList[]
     */
    public $toolList;
    protected $_name = [
        'domainCode' => 'DomainCode',
        'domainName' => 'DomainName',
        'toolCount' => 'ToolCount',
        'toolList' => 'ToolList',
    ];

    public function validate()
    {
        if (\is_array($this->toolList)) {
            Model::validateArray($this->toolList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainCode) {
            $res['DomainCode'] = $this->domainCode;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->toolCount) {
            $res['ToolCount'] = $this->toolCount;
        }

        if (null !== $this->toolList) {
            if (\is_array($this->toolList)) {
                $res['ToolList'] = [];
                $n1 = 0;
                foreach ($this->toolList as $item1) {
                    $res['ToolList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DomainCode'])) {
            $model->domainCode = $map['DomainCode'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['ToolCount'])) {
            $model->toolCount = $map['ToolCount'];
        }

        if (isset($map['ToolList'])) {
            if (!empty($map['ToolList'])) {
                $model->toolList = [];
                $n1 = 0;
                foreach ($map['ToolList'] as $item1) {
                    $model->toolList[$n1] = toolList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
