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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataExportDownloadURLResponseBody;

use AlibabaCloud\Tea\Model;

class downloadURLResult extends Model
{
    /**
     * @description Indicates whether export results are available for download. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $hasResult;

    /**
     * @description The message that indicates an exception.
     *
     * @example tip message
     *
     * @var string
     */
    public $tipMessage;

    /**
     * @description The download URL of the file that records the export results for the ticket.
     *
     * @example https://dms-idb-hangzhou.oss-cn-hangzhou.aliyuncs.com/xxx.zip
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'hasResult' => 'HasResult',
        'tipMessage' => 'TipMessage',
        'URL' => 'URL',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hasResult) {
            $res['HasResult'] = $this->hasResult;
        }
        if (null !== $this->tipMessage) {
            $res['TipMessage'] = $this->tipMessage;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return downloadURLResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HasResult'])) {
            $model->hasResult = $map['HasResult'];
        }
        if (isset($map['TipMessage'])) {
            $model->tipMessage = $map['TipMessage'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
