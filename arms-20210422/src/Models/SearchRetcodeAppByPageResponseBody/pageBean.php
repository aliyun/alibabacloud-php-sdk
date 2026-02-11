<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\SearchRetcodeAppByPageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\SearchRetcodeAppByPageResponseBody\pageBean\retcodeApps;

class pageBean extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var retcodeApps[]
     */
    public $retcodeApps;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'retcodeApps' => 'RetcodeApps',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->retcodeApps)) {
            Model::validateArray($this->retcodeApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->retcodeApps) {
            if (\is_array($this->retcodeApps)) {
                $res['RetcodeApps'] = [];
                $n1 = 0;
                foreach ($this->retcodeApps as $item1) {
                    $res['RetcodeApps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RetcodeApps'])) {
            if (!empty($map['RetcodeApps'])) {
                $model->retcodeApps = [];
                $n1 = 0;
                foreach ($map['RetcodeApps'] as $item1) {
                    $model->retcodeApps[$n1] = retcodeApps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
