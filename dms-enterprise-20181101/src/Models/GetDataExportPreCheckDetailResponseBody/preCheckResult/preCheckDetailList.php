<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult;

use AlibabaCloud\Tea\Model;

class preCheckDetailList extends Model
{
    /**
     * @var preCheckDetailList\preCheckDetailList[]
     */
    public $preCheckDetailList;
    protected $_name = [
        'preCheckDetailList' => 'PreCheckDetailList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->preCheckDetailList) {
            $res['PreCheckDetailList'] = [];
            if (null !== $this->preCheckDetailList && \is_array($this->preCheckDetailList)) {
                $n = 0;
                foreach ($this->preCheckDetailList as $item) {
                    $res['PreCheckDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckDetailList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PreCheckDetailList'])) {
            if (!empty($map['PreCheckDetailList'])) {
                $model->preCheckDetailList = [];
                $n = 0;
                foreach ($map['PreCheckDetailList'] as $item) {
                    $model->preCheckDetailList[$n++] = null !== $item ? preCheckDetailList\preCheckDetailList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
