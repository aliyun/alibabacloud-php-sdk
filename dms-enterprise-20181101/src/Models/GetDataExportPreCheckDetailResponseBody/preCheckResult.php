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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportPreCheckDetailResponseBody\preCheckResult\preCheckDetailList;
use AlibabaCloud\Tea\Model;

class preCheckResult extends Model
{
    /**
     * @description Specifies whether to skip verification. Valid values:
     *
     * - true
     * - false
     *
     * @example true
     *
     * @var bool
     */
    public $ignoreAffectRows;

    /**
     * @description The list of pre-check details.
     *
     * @var preCheckDetailList
     */
    public $preCheckDetailList;
    protected $_name = [
        'ignoreAffectRows' => 'IgnoreAffectRows',
        'preCheckDetailList' => 'PreCheckDetailList',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoreAffectRows) {
            $res['IgnoreAffectRows'] = $this->ignoreAffectRows;
        }
        if (null !== $this->preCheckDetailList) {
            $res['PreCheckDetailList'] = null !== $this->preCheckDetailList ? $this->preCheckDetailList->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return preCheckResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoreAffectRows'])) {
            $model->ignoreAffectRows = $map['IgnoreAffectRows'];
        }
        if (isset($map['PreCheckDetailList'])) {
            $model->preCheckDetailList = preCheckDetailList::fromMap($map['PreCheckDetailList']);
        }

        return $model;
    }
}
